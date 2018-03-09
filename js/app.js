var name = $('#signup-name').val();
var usern = $('#signup-username').val();
var pass = $('#signup-pass').val();

function store() {
  localStorage.setItem('name', name);
  localStorage.setItem('username', usern);
  localStorage.setItem('password', pass);
};

function check() {

  var storedName = localStorage.getItem('username');
  var storedPass = localStorage.getItem('password');

  var userName = $('#login-username').val();
  var userPass = $('#login-pass').val();

  if (userName == storedName && userPass == storedPass) {
    alert('You are logged in.');
  } else {
    alert('WRONG CREDENTIALS');
  }
};

$(document).ready(function() {
  $("form#sign-up").submit(function(event) {
    event.preventDefault();
    store();
  });
  $("form#login").submit(function(event) {
    event.preventDefault();
    check();
  });



  var oFileIn;
  var json, storedName, parsed, arr = [];

  oFileIn = document.getElementById('control');
  if (oFileIn.addEventListener) {
    oFileIn.addEventListener('change', filePicked, false);
  };


  function filePicked(oEvent) {
    var oFile = oEvent.target.files[0];
    var sFilename = oFile.name;

    var reader = new FileReader();

    reader.onload = function(e) {
      var data = e.target.result;
      var cfb = XLS.CFB.read(data, {
        type: 'binary'
      });
      var wb = XLS.parse_xlscfb(cfb);

      wb.SheetNames.forEach(function(sheetName) {
        var sCSV = XLS.utils.make_csv(wb.Sheets[sheetName]);
        var data = XLS.utils.sheet_to_json(wb.Sheets[sheetName], {
          header: 1
        });
        $.each(data, function(indexR, valueR) {
          var sRow = "<tr>";
          $.each(data[indexR], function(indexC, valueC) {
            sRow = sRow + "<td>" + valueC + "</td>";
            json = JSON.stringify(valueC);
            localStorage.setItem('json', json);
            storedName = localStorage.getItem('json');
            parsed = JSON.parse(storedName);

            var vals = parsed.split(" ");

            console.log(parsed);

          });
          sRow = sRow + "</tr>";

        });
        //alert(json);
      });

    };

    reader.readAsBinaryString(oFile);

  }
  $("span.window-list").append("<li>" + parsed + "kjgiuo</li>");
  console.log(parsed);


});