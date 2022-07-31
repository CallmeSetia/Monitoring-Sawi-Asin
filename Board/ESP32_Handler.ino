void Kirim_KeESP32() {
   //  // Kirim String ke ESP32
  if (millis() - processTime[0] >= 2000) {
    processTime[0] = millis();
    String allString = String(getSuhu[0]) + "#" +
                       String(hasilPH[0]) + "#" +
                       String(hasilPH[1]) + "#" +
                       String(hasilPH[1]) + "#" 
                       
//                       String(salPercentDua / 10.0) + "#" +
//                       String(defuzzyfikasi()) + "#" +
//                       String(ph_val1) + "#" +
//                       String(ph_val2)
                       ;

//    String allString = String(temperature_1) + "#" +
//                       String(temperature_2) + "#" +
//                       String(salPercentSatu / 10.0) + "#" +
//                       String(salPercentDua / 10.0) + "#" +
//                       String(defuzzyfikasi()) + "#" +
//                       String(ph_val1) + "#" +
//                       String(ph_val2);

    Serial.print(allString);
  }
}
