<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
    echo Asset::css(array($css), array("media"=>"all"));
    echo "<div class = \"gs\" id = \"logoGS\">" . html_entity_decode($logo) . "</div>";
    echo "<div class = \"gs\" id = \"nameGS\">" . html_entity_decode($name) . "</div>";
    echo "<div class = \"clearfix\"></div>";

    echo "<div class = \"gs\" id = \"upper\">" . html_entity_decode($upper) . "</div>";
    echo "<div class = \"gs\" id = \"lower\">" . html_entity_decode($lower) . "</div>";
?>

<script>
    $(document).ready(() => {
        document.body.setAttribute('id', 'bodygs');
        var upperRows = $("#upper table tr");
        var lowerRows = $("#lower table tr");
        console.log(upperRows.length);
                if(upperRows.length >= 5){
                        console.log("made it here");
                        document.getElementById("upper").style.pageBreakAfter = "always";
                }
                if(lowerRows.length >= 8){
                        document.getElementById("lower").style.pageBreakBefore = "always";
                }
                var upperTable = document.getElementById('upperTable');
                for(var i = 0, row; row = upperTable.rows[i]; i++){
            var x = row.cells[0];
            var selectorTag = "colors"+(i+1);
            var selector = document.getElementsByName(selectorTag)[0];
            var colorText = selector.options[selector.selectedIndex].innerHTML;
            x.innerHTML = "<p>" + colorText + "</p>";
            x.setAttribute('class', colorText);
        }
        $("#lowerTable tr td").removeClass();
    });
</script>
