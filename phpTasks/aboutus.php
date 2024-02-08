<?php include 'header.php'; ?>

<h2>About Us </h2>

<script>
// triggering an alert box.
document.write ("Hello world")
//window.alert("This is an alert box")
</script>


<noscript>
    if javascript is not enabled this will be displayed. 
    so users know they need to enable js.
</noscript>

<script>
    //document.write but after loading the page
    function hello(){
        document.write("This is after the page has loaded")
    }
</script>

<button onclick="document.write('This is something')"> Click Me</button>


<?php include 'footer.php'; ?>
