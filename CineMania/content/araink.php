<!DOCTYPE html>
<html>
<body>

  <style type="text/css">

  * {
    box-sizing:border-box;
    padding:0;
    margin:0;
    outline: 0;
  }

  body {
    font-family:Helvetica Neue,Helvetica,Arial,sans-serif;
    font-size:14px;
    padding:90px;
  }

  article {
    width:100%;
    max-width:1000px;
    margin:0 auto;
    height:1000px;
    position:relative;
  }

  table {
    border-collapse:collapse; table-layout:fixed; width:100%;
  }

  th {
    background:#F5F5F5; display:none;
  }

  td, th {
    height:53px
  }

  td,th {
     border:1px solid #DDD; padding:10px; empty-cells:show;
  }
  td,th {
    text-align:left;
  }

  td+td, th+th {
    text-align:center;
    display:none;
  }

  td.default {
    display:table-cell;
  }

  .bg-purple {
    border-top:3px solid #A32362;
  }

  .bg-blue {
    border-top:3px solid #0097CF;
  }

  .bg-red {
    border-top:3px solid #FF0000;
  }

  .bg-green {
    border-top:3px solid #23F24C;
  }

  .sep {
    background:#F5F5F5;
    font-weight:bold;
  }

  @media (min-width: 640px) {

    td,th {
      display:table-cell !important;
    }

    td,th {
      width: 330px;

    }

    td+td, th+th {
      width: auto;
    }

  }

  </style>

  <article>

  <table>

    <thead>
      <tr>
        <th class="hide"></th>
        <th class="bg-purple">Junior</th>
        <th class="bg-blue">Diák</th>
        <th class="bg-red">Szenior</th>
        <th class="bg-green">Felnőtt</th>
      </tr>
    </thead>

    <tbody>

      <tr>
        <td colspan="5" class="sep">Vetítés típusai</td>
      </tr>

      <tr>
        <td class="sep"> 2D </td>
        <td><span>1000Ft</span></td>
        <td><span>1100Ft</span></td>
        <td><span>1000Ft</span></td>
        <td><span>1300Ft</span></td>
      </tr>

      <tr>
        <td class="sep"> 3D </td>
        <td><span>1200Ft</span></td>
        <td><span>1300Ft</span></td>
        <td><span>1200Ft</span></td>
        <td><span>1600Ft</span></td>
      </tr>

      <tr>
        <td class="sep"> 4DX </td>
        <td><span>1600Ft</span></td>
        <td><span>1900Ft</span></td>
        <td><span>1800Ft</span></td>
        <td><span>2100Ft</span></td>
      </tr>

    </tbody>
  </table>

  </article>

</body>
</html>
