<fieldset style="width: 450px;">
    <legend>SEARCH</legend>
    <input type="text" id="term" onkeyup="search()" placeholder="Search By Name">
    <hr>
    <div id="result"></div>
</fieldset>

<script>
function search() {
    let term = document.getElementById('term').value;
    let xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('result').innerHTML = this.responseText;
        }
    };
    xhttp.open("GET", "search_handler.php?name=" + term, true);
    xhttp.send();
}
</script>