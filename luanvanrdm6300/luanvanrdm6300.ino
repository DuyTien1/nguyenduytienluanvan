#include <rdm6300.h>
#include <ESP8266WiFi.h>
#include <ESP8266HTTPClient.h>
#include <WiFiClient.h>

#define RDM6300_RX_PIN D4
#define buzzer D3
#define led D2

const char* ssid = "niTe";
const char* password = "12345678";
// unsigned long lastTime = 0;
// unsigned long timerDelay = 5000;
// int UID[4], i;
// int d = 1;
String data = "";

Rdm6300 rdm6300;

void setup() {
  Serial.begin(115200); 
  pinMode(buzzer, OUTPUT);
  pinMode(led, OUTPUT);
  digitalWrite(buzzer, HIGH);
  rdm6300.begin(RDM6300_RX_PIN);
  WiFi.begin(ssid, password);
  Serial.println("Dang Ket Noi");
  while(WiFi.status() != WL_CONNECTED) {
    digitalWrite(led, HIGH);
    delay(500);
    Serial.print("*");
  }
  digitalWrite(led, LOW);
  Serial.println("");
  Serial.print("Ket Noi Thanh Cong, Dia Chi IP La: ");
  Serial.println(WiFi.localIP());
}

void loop() {
    if(WiFi.status() == WL_CONNECTED){
      WiFiClient client;
      HTTPClient http;
      
      http.begin(client, "http://192.168.17.132/luanvan/public/api/check");
      int httpResponseCode = http.GET();
      digitalWrite(led, LOW);
      
      if (httpResponseCode==200) {
        // Serial.print("HTTP Response code: ");
        // Serial.println(httpResponseCode);
        String payload = http.getString();
        if (payload == "1") {


            if (rdm6300.get_new_tag_id()) {
              data = String(rdm6300.get_tag_id());
            } else {
            return;
            }


          Serial.print(data);
          Serial.println(" ");

          ring();

          String ValueSend, postData;
          ValueSend = String(data);
          postData = "rfid=" + ValueSend + "&classroomcode=A1";
          http.begin(client, "http://192.168.17.132/luanvan/public/api/checkin");
          http.addHeader("Content-Type", "application/x-www-form-urlencoded");
          int httpCode = http.POST(postData);
          String payload2 = http.getString();
          if (httpCode > 0){
            Serial.println(payload2);
          } else {
            digitalWrite(led, HIGH);
            delay(500);
            Serial.print("Error on sending POST: ");
            Serial.println(httpCode);
            digitalWrite(led, LOW);
            delay(400);
          }

          if (data != "") {
            data = "";
          } 

          Serial.println(" ");
        }

        if (payload == "2") {

          if (rdm6300.get_new_tag_id()) {
            data = String(rdm6300.get_tag_id());
          } else {
            return;
          }
          
          Serial.print(data);
          Serial.println(" ");

          ring();

          String ValueSend, postData;
          ValueSend = String(data);
          postData = "rfid=" + ValueSend;
          http.begin(client, "http://192.168.17.132/luanvan/public/api/signin");
          http.addHeader("Content-Type", "application/x-www-form-urlencoded");
          int httpCode = http.POST(postData);
          String payload2 = http.getString();
          if (httpCode > 0){
            Serial.println(payload2);
          } else {
            digitalWrite(led, HIGH);
            delay(500);
            Serial.print("Error on sending POST: ");
            Serial.println(httpCode);
            digitalWrite(led, LOW);
            delay(400);
          }

          if (data != "") {
            data = "";
          } 

          Serial.println(" ");
        }
      } else {
        digitalWrite(led, HIGH);
        delay(500);
        Serial.print("Error code: ");
        Serial.println(httpResponseCode);
        digitalWrite(led, LOW);
        delay(400);
      }
      http.end();
    } else {
      Serial.println("Mat Ket Noi Wfi");
    }
    delay(2000);
}

void ring() {
  digitalWrite(buzzer, LOW);
  delay(500);
  digitalWrite(buzzer, HIGH);
}