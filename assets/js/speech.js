function square(i) {
var synthesis = window.speechSynthesis;
var s = document.getElementById(i).innerHTML;
var utterance1 = new SpeechSynthesisUtterance(s);
utterance1.lang = 'es-ES';
synthesis.speak(utterance1);
}