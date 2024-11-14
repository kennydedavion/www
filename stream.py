import cv2
from flask import Flask, Response, redirect, url_for
from threading import Lock

app = Flask(__name__)

# Stav streamu a zámek pro vlákno-bezpečný přístup
is_streaming = True
stream_lock = Lock()

def generate_frames():
    global is_streaming
    camera = cv2.VideoCapture('/dev/video1')  # Změňte na /dev/video1

    while True:
        # Pokud je stream deaktivován, uvolněte kameru a ukončete generátor
        with stream_lock:
            if not is_streaming:
                camera.release()
                break

        success, frame = camera.read()
        if not success:
            break
        else:
            # Kódování snímků do formátu JPEG
            ret, buffer = cv2.imencode('.jpg', frame)
            frame = buffer.tobytes()
            # Vytvoření streamovacího rámce
            yield (b'--frame\r\n'
                   b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')

@app.route('/video_feed')
def video_feed():
    global is_streaming
    with stream_lock:
        is_streaming = True  # Při načtení stránky aktivujeme stream
    return Response(generate_frames(), mimetype='multipart/x-mixed-replace; boundary=frame')

@app.route('/stop_stream')
def stop_stream():
    global is_streaming
    with stream_lock:
        is_streaming = False  # Deaktivace streamu
    return redirect(url_for('video_feed'))  # Přesměrujeme zpět na streamovací stránku

if __name__ == '__main__':
    app.run(host='0.0.0.0', port=8081)  # Spuštění Flask aplikace

