<!DOCTYPE html>
<head>
    <title>Adding options to a select element using jQuery?</title>
</head>
<body>
    <h1 style="color: green">GeeksForGeeks</h1>
    <b>Adding options to a select element using jQuery?</b>
    <p>
        Select one from the given options:
        <select id="select1">
            <option value="free">Free</option>
            <option value="basic">Basic</option>
        </select>
    </p>
    <p>Click the button below to add one option to the select box.</p>
    <input type="text" id="txt">
    <button onclick="addOption()">Add option</button>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script type="text/javascript">
        function addOption() {
            $('#languages').multiselect();
            textValue = document.getElementById("txt").value,
            optionText = textValue;
            optionValue = textValue;
  
            $('#select1').append($('<option>').val(optionValue).text(optionText));
        }
    </script>
</body>
</html>