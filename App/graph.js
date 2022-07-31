$(document).ready(function() {
    selesaiG();
});

function selesaiG() {
    setTimeout(function() {
        updateG();
        selesaiG();
    }, 2000);
}

function updateG() {
    $.ajax(
        {
            url: './graph.php',
            type: 'GET',
            dataType: 'json',  // Let jQuery know returned data is json.
            success: function(result)
            {
                dataA1 = Object.values(result)[9];
                dataA2 = Object.values(result)[8];
                dataA3 = Object.values(result)[7];
                dataA4 = Object.values(result)[6];
                dataA5 = Object.values(result)[5];
                dataA6 = Object.values(result)[4];
                dataA7 = Object.values(result)[3];
                dataA8 = Object.values(result)[2];
                dataA9 = Object.values(result)[1];
                dataA10 = Object.values(result)[0];

                dataB1 = Object.values(result)[19];
                dataB2 = Object.values(result)[18];
                dataB3 = Object.values(result)[17];
                dataB4 = Object.values(result)[16];
                dataB5 = Object.values(result)[15];
                dataB6 = Object.values(result)[14];
                dataB7 = Object.values(result)[13];
                dataB8 = Object.values(result)[12];
                dataB9 = Object.values(result)[11];
                dataB10 = Object.values(result)[10];

                dataC1 = Object.values(result)[29];
                dataC2 = Object.values(result)[28];
                dataC3 = Object.values(result)[27];
                dataC4 = Object.values(result)[26];
                dataC5 = Object.values(result)[25];
                dataC6 = Object.values(result)[24];
                dataC7 = Object.values(result)[23];
                dataC8 = Object.values(result)[22];
                dataC9 = Object.values(result)[21];
                dataC10 = Object.values(result)[20];

                dataD1 = Object.values(result)[39];
                dataD2 = Object.values(result)[38];
                dataD3 = Object.values(result)[37];
                dataD4 = Object.values(result)[36];
                dataD5 = Object.values(result)[35];
                dataD6 = Object.values(result)[34];
                dataD7 = Object.values(result)[33];
                dataD8 = Object.values(result)[32];
                dataD9 = Object.values(result)[31];
                dataD10 = Object.values(result)[30];

                dataE1 = Object.values(result)[49];
                dataE2 = Object.values(result)[48];
                dataE3 = Object.values(result)[47];
                dataE4 = Object.values(result)[46];
                dataE5 = Object.values(result)[45];
                dataE6 = Object.values(result)[44];
                dataE7 = Object.values(result)[43];
                dataE8 = Object.values(result)[42];
                dataE9 = Object.values(result)[41];
                dataE10 = Object.values(result)[40];

                dataF1 = Object.values(result)[59];
                dataF2 = Object.values(result)[58];
                dataF3 = Object.values(result)[57];
                dataF4 = Object.values(result)[56];
                dataF5 = Object.values(result)[55];
                dataF6 = Object.values(result)[54];
                dataF7 = Object.values(result)[53];
                dataF8 = Object.values(result)[52];
                dataF9 = Object.values(result)[51];
                dataF10 = Object.values(result)[50];

                dataG1 = Object.values(result)[69];
                dataG2 = Object.values(result)[68];
                dataG3 = Object.values(result)[67];
                dataG4 = Object.values(result)[66];
                dataG5 = Object.values(result)[65];
                dataG6 = Object.values(result)[64];
                dataG7 = Object.values(result)[63];
                dataG8 = Object.values(result)[62];
                dataG9 = Object.values(result)[61];
                dataG10 = Object.values(result)[60];

                dataH1 = Object.values(result)[79];
                dataH2 = Object.values(result)[78];
                dataH3 = Object.values(result)[77];
                dataH4 = Object.values(result)[76];
                dataH5 = Object.values(result)[75];
                dataH6 = Object.values(result)[74];
                dataH7 = Object.values(result)[73];
                dataH8 = Object.values(result)[72];
                dataH9 = Object.values(result)[71];
                dataH10 = Object.values(result)[70];

                dataI1 = Object.values(result)[89];
                dataI2 = Object.values(result)[88];
                dataI3 = Object.values(result)[87];
                dataI4 = Object.values(result)[86];
                dataI5 = Object.values(result)[85];
                dataI6 = Object.values(result)[84];
                dataI7 = Object.values(result)[83];
                dataI8 = Object.values(result)[82];
                dataI9 = Object.values(result)[81];
                dataI10 = Object.values(result)[80];

                $("#ajaxGA").append("<script>\n" +
                    "            var xValues = [\"Data 1\", \"Data 2\", \"Data 3\", \"Data 4\", \"Data 5\", \"Data 6\", \"Data 7\", \"Data 8\", \"Data 9\", \"Data 10\", ];\n" +
                    "\n" +
                    "            new Chart(\"chart1\", {\n" +
                    "                type: \"line\",\n" +
                    "                data: {\n" +
                    "                    labels: xValues,\n" +
                    "                    datasets: [{\n" +
                    "                        data:  ["+dataA1+","+dataA2+","+dataA3+","+dataA4+","+dataA5+","+dataA6+","+dataA7+","+dataA8+","+dataA9+","+dataA10+"],\n" +
                    "                        borderColor: \"red\",\n" +
                    "                        fill: false\n" +
                    "                    }, {\n" +
                    "                        data: ["+dataB1+","+dataB2+","+dataB3+","+dataB4+","+dataB5+","+dataB6+","+dataB7+","+dataB8+","+dataB9+","+dataB10+"],\n" +
                    "                        borderColor: \"blue\",\n" +
                    "                        fill: false\n" +
                    "                    }]\n" +
                    "                },\n" +
                    "                options: {\n" +
                    "                    legend: {display: false}\n" +
                    "                }\n" +
                    "            });\n" +
                    "        </script>"
                );

                $("#ajaxGB").append("<script>\n" +
                    "            var xValues = [\"Data 1\", \"Data 2\", \"Data 3\", \"Data 4\", \"Data 5\", \"Data 6\", \"Data 7\", \"Data 8\", \"Data 9\", \"Data 10\", ];\n" +
                    "\n" +
                    "            new Chart(\"chart2\", {\n" +
                    "                type: \"line\",\n" +
                    "                data: {\n" +
                    "                    labels: xValues,\n" +
                    "                    datasets: [{\n" +
                    "                        data:  ["+dataC1+","+dataC2+","+dataC3+","+dataC4+","+dataC5+","+dataC6+","+dataC7+","+dataC8+","+dataC9+","+dataC10+"],\n" +
                    "                        borderColor: \"green\",\n" +
                    "                        fill: false\n" +
                    "                    }, {\n" +
                    "                        data: ["+dataD1+","+dataD2+","+dataD3+","+dataD4+","+dataD5+","+dataD6+","+dataD7+","+dataD8+","+dataD9+","+dataD10+"],\n" +
                    "                        borderColor: \"orange\",\n" +
                    "                        fill: false\n" +
                    "                    }]\n" +
                    "                },\n" +
                    "                options: {\n" +
                    "                    legend: {display: false}\n" +
                    "                }\n" +
                    "            });\n" +
                    "        </script>"
                );

                $("#ajaxGC").append("<script>\n" +
                    "            var xValues = [\"Data 1\", \"Data 2\", \"Data 3\", \"Data 4\", \"Data 5\", \"Data 6\", \"Data 7\", \"Data 8\", \"Data 9\", \"Data 10\", ];\n" +
                    "\n" +
                    "            new Chart(\"chart3\", {\n" +
                    "                type: \"line\",\n" +
                    "                data: {\n" +
                    "                    labels: xValues,\n" +
                    "                    datasets: [{\n" +
                    "                        data:  ["+dataE1+","+dataE2+","+dataE3+","+dataE4+","+dataE5+","+dataE6+","+dataE7+","+dataE8+","+dataE9+","+dataE10+"],\n" +
                    "                        borderColor: \"navy\",\n" +
                    "                        fill: false\n" +
                    "                    }, {\n" +
                    "                        data: ["+dataF1+","+dataF2+","+dataF3+","+dataF4+","+dataF5+","+dataF6+","+dataF7+","+dataF8+","+dataF9+","+dataF10+"],\n" +
                    "                        borderColor: \"teal\",\n" +
                    "                        fill: false\n" +
                    "                    }]\n" +
                    "                },\n" +
                    "                options: {\n" +
                    "                    legend: {display: false}\n" +
                    "                }\n" +
                    "            });\n" +
                    "        </script>"
                );

                $("#ajaxGD").append("<script>\n" +
                    "            var xValues = [\"Data 1\", \"Data 2\", \"Data 3\", \"Data 4\", \"Data 5\", \"Data 6\", \"Data 7\", \"Data 8\", \"Data 9\", \"Data 10\", ];\n" +
                    "\n" +
                    "            new Chart(\"chart4\", {\n" +
                    "                type: \"line\",\n" +
                    "                data: {\n" +
                    "                    labels: xValues,\n" +
                    "                    datasets: [{\n" +
                    "                        data:  ["+dataG1+","+dataG2+","+dataG3+","+dataG4+","+dataG5+","+dataG6+","+dataG7+","+dataG8+","+dataG9+","+dataG10+"],\n" +
                    "                        borderColor: \"red\",\n" +
                    "                        fill: false\n" +
                    "                    }, {\n" +
                    "                        data: ["+dataH1+","+dataH2+","+dataH3+","+dataH4+","+dataH5+","+dataH6+","+dataH7+","+dataH8+","+dataH9+","+dataH10+"],\n" +
                    "                        borderColor: \"black\",\n" +
                    "                        fill: false\n" +
                    "                    }]\n" +
                    "                },\n" +
                    "                options: {\n" +
                    "                    legend: {display: false}\n" +
                    "                }\n" +
                    "            });\n" +
                    "        </script>"
                );
            }
    });
}
/*$(document).ready(function()
{

    $("body").ready(function()
    {

    });
});*/