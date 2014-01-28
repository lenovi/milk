<script type="text/javascript" src="path/to/zebra_dialog.js"></script>
 

<link rel="stylesheet" href="path/to/zebra_dialog.css" type="text/css">

<script>
$(document).ready(function() {

    // show a dialog box when clicking on a link
    $(anchor).bind('click', function(e) {
        e.preventDefault();
        $.Zebra_Dialog('The link was clicked!');
    });

 });
 </script>
 
 <script>
 
 $.Zebra_Dialog('<strong>Zebra_Dialog</strong>, a small, compact and highly' + 
    'configurable dialog box plugin for jQuery');
 </script>