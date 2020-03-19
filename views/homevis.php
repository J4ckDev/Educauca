<?php
session_start();

if (empty($_SESSION["email"])) {
    header('Location:../');
}

include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/head.php');
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/body.php');

?>
<style>
#box {
  background-color: black;
  color: white;
  margin: 20px;
  padding: 20px;
}
</style>
<div id="box">
    <h1>que visaje</h1>
    <p>Buenas días alumno, en la clase de hoy estudiaremos los patrones de diseño </p>
</div>
<script src="https://webreader.naturalreaders.com/nr-webreader.js" defer></script>
<script>
    window.addEventListener("DOMContentLoaded", function() {
        if (typeof NRWebReader != 'undefined') {
            window['NRWebReader'] = new NRWebReader({
            widget_id: "r8qq12ikvx",  // DO NOT REMOVE. This is your widget ID for your WebReader
            icon: {
            //    icon_name: "speaker", /*Optional: Alternative icon to show as the widget icon*/
            //    icon_position: "bottom-left", /*Optional: Position for the the widget to show up at*/
            //    icon_position_offsets: {/*Optional: Custom position offsets for the the widget to show up at*/
            //        left:""
            //        right:""
            //        top:""
            //        bottom:""
            //    }
            //    icon_color: "#0555B8", /*Optional: Color of the icon*/
            //    icon_size: {width: "60px", height: "60px"}, /*Optional: icon size. Above 50px is recommended.*/
            //    text_box: true, /*Optional: false if you don't want to have a greeting text box*/
            //    text_box_greeting: "Listen", /*Optional: Your greeting text in the text box*/
            //    text_box_background_color: "#ffffff", /*Optional: Background color of text box*/
            //    text_box_font_color: "#0555B8", /*Optional: Color of the icon*/
            //    text_box_font_size: "18px", /*Optional: Font size of the text in text box*/
            //    show_in_mobile: true, /*Optional: false if you don't want the widget to show up on mobile*/
            //    mob_icon_position: "bottom-left", /*Optional: Position for the the widget to show up at on mobile*/
            //    mob_icon_position_offsets: {/*Optional: Custom position offsets for the the widget to show up at on mobile*/
            //        left:""
            //        right:""
            //        top:""
            //        bottom:""
            //    }
            //    mob_icon_size: {width: "30px", height: "30px"}, /*Optional: icon size on mobile. Above 30px is recommended.*/
            //    mob_text_box: false /*Optional: false if you don't want to have a greeting text box on mobile*/
            },
            bar : {
            //    settings_default_voice: "Matthew *", /*Optional: Default voice for TTS*/
            //    settings_default_speed: 1, /*Optional: Default speed for TTS*/
            //    settings_highlight_colour_scheme: "dark" /*Optional: Default color scheme for highlighting text being read on page*/
            },
            custom_text_source: "#box" /*Optional: only read the text inside the HTML element with the id or class */
            });
        }
    }); 
</script> 
<?php
include_once($_SERVER['DOCUMENT_ROOT'] . '/views/layouts/footer.php');
?>