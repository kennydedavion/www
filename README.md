# www
www for rpi apache https VR dualview picamera pan-tilt motion remote, gyro acc 

Po spusteni Rpi4 s raspbianem-buster 10.0 

cat /proc/cpuinfo
lsb_release -d
cat /etc/os-release
uname -a
getconf LONG_BIT
Tento příkaz vrací buď číslo 32 nebo 64 podle toho, jestli je operační systém 32bitový (hodnota 32) nebo 64bitový (hodnota 64).

Dale nainstalujte:
https://github.com/silvanmelchior/RPi_Cam_Web_Interface -dle navodu na teto strance.
Pro podrobnejsi informace a pozadavky pouzijte : https://elinux.org/RPi-Cam-Web-Interface
po uspesne instalaci a nastaveni, vcetne odzkouseni funkcnosti, pokracujte na :  https://www.instructables.com/Raspberry-Pi-Cam-Pan-Tilt-Control-Over-Local-Inter/
a po dokonceni tohoto navodu pouzijte soubory z tohoto uloziste pro usb cameru,stranku s ovladanim pro pan-tilt v GUI rozhrani, zobrazovani gyroskopu a akcelerometru v uhlovem ukazately.






sudo nano /boot/config.txt

nainstaluji :





sudo raspi-config


 1009  sudo apt install libraspberrypi0 libraspberrypi raspberrypi-bootloader raspberrypi-kernel
 1010  sudo apt install libraspberrypi0 raspberrypi-bootloader raspberrypi-kernel
 1011  sudo apt install --reinstall libraspberrypi0 raspberrypi-bootloader raspberrypi-kernel
 1012  sudo nano /boot/config.txt 
 1013  sudo raspi-config
 1014  reboot
 1015  test-async.js
 1016  cd ros_catkin_ws/
 1017  lsusb
 1018  alsamixer
 1019  arecord -l
 1020  arecord -D
 1021  git clone https://github.com/StevenHickson/PiAUISuite.git
 1022  cd PiAUISuite/Install
 1023  ./InstallAUISuite.sh
 1024  sudo apt-get install -y libboost-dev libboost-regex-dev ./speech-recog.sh
 1025  cd ..
 1026  dir
 1027  cd VoiceCommand/
 1028  sudo  ./speech-recog.sh
 1029  sudo voicecommand -c
 1030  voicecommand -e
 1031  arecord -D plughw:1,0 test.wav
 1032  sudo arecord -D plughw:1,0 test.wav
 1033  wget –no-check-certificate “http://goo.gl/KrwrBa” -O PiAUISuite.tar.gz
 1043  sudo chmod +x picam
 1044  cd ..
 1045  sudo chmod +x www
 1046  python pi.py
 1047  python picam.py
 1048  rosdep update
 1049  git clone https://github.com/ros-drivers/audio_common.git
 1050  start.sh
 1051  ./start.sh install
 1052  sudo ./start.sh install
 1053  sudo apt-get upgrade libboost-all-dev
 1054  sudo apt-get upgrade libboost1.67-all-dev
 1055  sudo apt-get upgrade libboost-regex1.63-dev
 1056  sudo apt-get install libboost-regex1.63-dev
 1057  sudo apt-get upgrade libboost-regex1.63-dev
 1058  sudo apt-get upgrade libboost-regex*
 1059  sudo apt-get upgrade libboost-regex
 1060  sudo apt-get upgrade libboost-regex1.58-de 
 1061  sudo apt-get install libboost1.67-all-dev
 1062  sudo rm libboost_regex.so.1.49.0
 1087  cd RPi_Cam_Web_Interface/
 1088  ./RPi_Cam_Web_Interface_Installer.sh install
 1089  ./start.sh start
 1090  sudo ./start.sh install
 1091  sudo chown -R www-data:www-data /var/www/picam
 1092  sudo ./start.sh install
 1093  sudo apt-get upgrade php
 1094  sudo apt-get upgrade php5
 1095  sudo apt-get upgrade php7
 1096  sudo apt-get install php7
 1097  ./start.sh install
 1098  ./install.sh install
 1099  ./start.sh install
 1100  ./install.sh install
 1101  ./update.sh install
 1102  ./RPi_Cam_Web_Interface_Installer.sh install
 1103  python usb.py
 1104  cd ..
 1105    ./servod
 1200  sudo ./servod
 1201  sudo pigpiod
 1202  cd ..
 1203  cd ..cd ..
 1204  sudo chmod 666 html/
 1205  sudo chmod 666 html
 1206  sudo chmod +x html
 1207  sudo nano flaskservo.py
 1208  python3 flaskservo.py

 1229  sudo nano servoblaster.py 
 1230  python servoblaster.py 
 1231  sudo nano servoblaster.py 
 1232  python servoblaster.py 
 1233  git clone https://github.com/richardghirst/PiBits.git
 1234  cd PiBits/
 1235  cd ServoBlaster/
 1236  cd user
 1237  make servod
 1238  ./servod --help
 1239  ps ax
 1240  sudo killall servod
 1241  cd  /etc/dphys-swapfile
 1242  cd ~/etc/dphys-swapfile/
 1243  sudo nano ~ /etc/dphys-swapfile
 1244  echo 3=120 > /dev/servoblaster
 1245  make servod
 1246  sudo make servod
 1247  sudo make install
 1248  cd
 1249  cd ..
 1250  cd var
 1251  cd www
 1252  dir
 1253  echo 3=120 > /dev/servoblaster
 1254  echo 3=100 > /dev/servoblaster
 1255  echo 3=200 > /dev/servoblaster
 1256  echo 3=100 > /dev/servoblaster
 1257  echo 3=2000 > /dev/servoblaster
 1258  echo 3=50 > /dev/servoblaster
 1259  echo 3=60 > /dev/servoblaster
 1260  
 1265  sudo stop.sh
 1266  sudo stop.sh start
 1267  sudo stop.sh install
 1268  ./stop.sh
 1269  stop.sh
 1270  sudo pip install adafruit-circuitpython-servokit
 1999  sudo pip3 install adafruit-circuitpython-servokit
 2000  sudo pip3 install adafruit-extended-bus
 2001  cd Desktop/
 2002  history > pozdni.txt























































