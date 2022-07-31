$(document).ready(function() {
    selesai();


});

function selesai() {
    setTimeout(function() {
        update();
        selesai();
    }, 200);
}

function update() {
    $.getJSON("data.php", function(dataA) {
        $("#dataA").empty();
        var no = 1;
        $("#dataA").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataA.resultA, function() {
            $("#dataA").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataB) {
        $("#dataB").empty();
        var no = 1;
        $("#dataB").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataB.resultB, function() {
            $("#dataB").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataC) {
        $("#dataC").empty();
        var no = 1;
        $("#dataC").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataC.resultC, function() {
            $("#dataC").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataD) {
        $("#dataD").empty();
        var no = 1;
        $("#dataD").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataD.resultD, function() {
            $("#dataD").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataE) {
        $("#dataE").empty();
        var no = 1;
        $("#dataE").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataE.resultE, function() {
            $("#dataE").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataF) {
        $("#dataF").empty();
        var no = 1;
        $("#dataF").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataF.resultF, function() {
            $("#dataF").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataG) {
        $("#dataG").empty();
        var no = 1;
        $("#dataG").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataG.resultG, function() {
            $("#dataG").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataH) {
        $("#dataH").empty();
        var no = 1;
        $("#dataH").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataH.resultH, function() {
            $("#dataH").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataI) {
        $("#dataI").empty();
        var no = 1;
        $("#dataI").append("<thead><tr><th scope='col'>No</th><th scope='col'>Tanggal</th><th scope='col'>Jam</th><th scope='col'>Nilai Sensor</th></tr></thead>");
        $.each(dataI.resultI, function() {
            $("#dataI").append("" +
                "<tbody>" +
                "<tr>" +
                "<th scope='row'>"+(no++)+"</th>" +
                "<td>"+this['tanggal']+"</td>" +
                "<td>"+this['jam']+"</td>" +
                "<td>"+this['nilai_sensor']+"</td>" +
                "</tr>" +
                "</tbody>");
        });
    });
    $.getJSON("data.php", function(dataABrief) {
        $("#dataABrief").empty();
        $.each(dataABrief.resultABrief, function() {
            $("#dataABrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    $.getJSON("data.php", function(dataBBrief) {
        $("#dataBBrief").empty();
        $.each(dataBBrief.resultBBrief, function() {
            $("#dataBBrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    $.getJSON("data.php", function(dataCBrief) {
        $("#dataCBrief").empty();
        $.each(dataCBrief.resultCBrief, function() {
            $("#dataCBrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    $.getJSON("data.php", function(dataDBrief) {
        $("#dataDBrief").empty();
        $.each(dataDBrief.resultDBrief, function() {
            $("#dataDBrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    $.getJSON("data.php", function(dataEBrief) {
        $("#dataEBrief").empty();
        $.each(dataEBrief.resultEBrief, function() {
            $("#dataEBrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    $.getJSON("data.php", function(dataFBrief) {
        $("#dataFBrief").empty();
        $.each(dataFBrief.resultFBrief, function() {
            $("#dataFBrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    $.getJSON("data.php", function(dataGBrief) {
        $("#dataGBrief").empty();
        $.each(dataGBrief.resultGBrief, function() {
            $("#dataGBrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    $.getJSON("data.php", function(dataHBrief) {
        $("#dataHBrief").empty();
        $.each(dataHBrief.resultHBrief, function() {
            $("#dataHBrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    $.getJSON("data.php", function(dataIBrief) {
        $("#dataIBrief").empty();
        $.each(dataIBrief.resultIBrief, function() {
            $("#dataIBrief").append(
                "<h1>"+this['nilai_sensor']+"</h1>"+
                "<p class='text-muted'>"+this['tanggal']+"&nbsp;-&nbsp;"+this['jam']+"</p>"
            );
        });
    });
    /*$.getJSON("data.php", function(dataAGraph) {
        $("#dataAGraph").empty();
        $.each(dataAGraph.resultGraphA, function() {
            var B = this['nilai_sensor'];
            var B1 = B[0]; var B2 = B[1]; var B3 = B[2]; var B4 = B[3];
            var C = B1 + B2 + B3 + B4+ ",";
            var D = C.split(',');

            var AA = this['nilai_sensor'][0].split;

            $("#dataAGraph").append(
                //B1 + B2 + B3 + B4 + "," +
                D[0] +
                //+ AA[0] +
                "<script>\n" +
                "            var xValues = [100,200,300,400,500,600,700,800,900,1000];\n" +
                "            var dataW = ["+ this['nilai_sensor'] + "," +"];\n" +
                "            var A = "+ this['nilai_sensor'] +";\n" +
                "\n" +
                "            new Chart(\"chart1\", {\n" +
                "                type: \"line\",\n" +
                "                data: {\n" +
                "                    labels: xValues,\n" +
                "                    datasets: [{\n" +
                "                        data: dataW ,\n" +
                "                        borderColor: \"red\",\n" +
                "                        fill: false\n" +
                "                    }, {\n" +
                "                        data: [300,700,2000,5000,6000,4000,2000,1000,200,100,],\n" +
                "                        borderColor: \"green\",\n" +
                "                        fill: false\n" +
                "                    }, {\n" +
                "                        data: [300,700,2000,5000,6000,4000,2000,1000,200,100],\n" +
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
        });
    });*/


}