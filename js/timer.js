function moveClock(){
  time = new Date()
  hour = time.getHours()
  minute = time.getMinutes()
  seconds = time.getSeconds()

  str_second = new String (seconds)
  if (str_second.length == 1)
     seconds = "0" + seconds

  str_minute = new String (minute)
  if (str_minute.length == 1)
     minute = "0" + minute

  str_hour = new String (hour)
  if (str_hour.length == 1)
     hour = "0" + hour

  showHour = hour + " : " + minute + " : " + seconds

  document.form_reloj.reloj.value = showHour

  setTimeout("moveClock()",1000)
}