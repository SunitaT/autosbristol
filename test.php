{% for office in offices %}
{{ office.name }}
{{ office.id }}
{{ office.email }}
{% endfor %}


{% comment %}
{% for consultant in consultants %}
  <img src="{{ consultant.image }}" />
  {{ consultant.full_name }}
  {{ consultant.id }}
   {{ consultant.image_url | image_tag: consultant.full_name }}
{% endfor %}

{% debug listing %}
{% endcomment %}

{% assign listing = request.listing? %}
  
  
  
  {{ listing.price_tag }}

    {% if listing.files %}
      {% for file in listing.files limit:1 %}
        <li class="print"><a href="{{ file.url }}">Contract</a></li>
      {% endfor %}
    {% endif %}

<!-- 
{% for o in offices %}
  {{ o.id }} {{ o.suburb }}<br/>
{% endfor %}

{% for l in listings.current.sales %}
  {{ l.office.suburb }} {{ l.full_address }} {{ l.date_listed }}<br/>
{% endfor %}


{% for s in listings.sales.current.suburbs %}
  {{ s }}<br/>
{% endfor %}



{% comment %}
<html>
  <head>
    <style>


  body {background: #ffffff; color: #000000;}

  /*.footnote {float: footnote;}*/

  td { padding: 20px 0; vertical-align: top; page-break-inside: avoid;}
  tr {border-bottom: 1px solid #000000; page-break-inside: avoid;}

  tfoot { display: table-footer-group; }

  @media print {
    @page  {
      margin: 1.5cm 0.5cm;
    }

    td, tr {page-break-inside: avoid;}

    tfoot { display: table-footer-group; }
  }
</style>

{% capture scriptpage %}
<script>
$(document).ready(function() {
  window.print();
});
</script>
{% endcapture %}
  </head>
  <body>
    <table>
  <thead></thead>
  <tfoot>
    <tr>
      <td>footer</td>
    </tr>
  </tfoot>

  <tbody>
    {% for i in (1..200) %}
      test<br/>
    {% endfor %}
  </tbody>
</table>
  </body>
</html>
{% if request.query contains "type=rentals" %}
  {% assign listings = listings.current.rentals %}
{% else %}
  {% assign listings = listings.current.sales %}
{% endif %}



{% endcomment %}
-->
