<!DOCTYPE html>
<html>
<body>

  <style type="text/css">

  * {
    padding:0;
    margin:0;
    outline: 0;
  }

  body {
    font-family:Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size:20px;
    padding:190px;
    background-color: #8c8c8c;
  }

  article {
    width:100%;
    max-width:1000px;
    margin:0 auto;
    height:500px;
    position:relative;
  }

  .sep {
    font-weight:bold;
    background-color: #8c8c8c;
    color: #ffffff;
  }

  .header {
    background:#8c8c8c;
    font-weight:bold;
    font-size: 35px;
    padding-bottom: 40px;
    color: #ffffff;
  }

  @media (min-width: 640px) {

    td,th {
      width: 200px;
    }

    td+td, th+th {
      width: auto;
    }

  }

  .example_a {
    color: #fff !important;
    text-transform: uppercase;
    text-decoration: none;
    background: #bc161b;
    padding: 5px;
    border-radius: 5px;
    display: inline-block;
    border: none;
    transition: all 0.4s ease 0s;
  }

  .example_a:hover {
    background: #434343;
    letter-spacing: 1px;
    -webkit-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
    -moz-box-shadow: 0px 5px 40px -10px rgba(0,0,0,0.57);
    box-shadow: 5px 40px -10px rgba(0,0,0,0.57);
    transition: all 0.4s ease 0s;
  }

  </style>

  <article>

  <table>

    <tbody>

      <tr>
        <td class="header"> Elérhetőségeink </td>
      </tr>

      <tr>
        <td class="sep"> Facebook </td>
        <td>
          <div class="button_cont" align="center">
            <a class="example_a" href="http://www.facebook.com/" target="_blank"> Facebook </a>
          </div>
        </td>
      </tr>

      <tr>
        <td class="sep"> Instagram </td>
        <td>
          <div class="button_cont" align="center">
            <a class="example_a" href="http://www.instagram.com/" target="_blank"> Instagram </a>
          </div>
        </td>
      </tr>

      <tr>
        <td class="sep"> Cím </td>
        <td>
          <span class="sep"> Debrecen, Random utca, xyz. szám </span>
        </td>
      </tr>

    </tbody>
  </table>

  </article>

  <script type="text/javascript">

    document.getElementById("myButton1").onclick = function () {
        location.href = "http://www.facebook.com/CineMania";
    };

    document.getElementById("myButton2").onclick = function () {
        location.href = "http://www.instagram.com/CineMania";
    };

  </script>

</body>
</html>
