<script id="templateFormModifEtapes" type="text/html">
  <form action="adminModifier.php" method="POST">
    <select class="form-select" size="5" name="id_etape">
      {{ #. }}
      <option value="{{id_etape}}">{{ville_etape}} | {{date_etape}} | {{heure_etape}} | {{nom_etape}}</option>
      {{ /. }}
    </select>
    <input type="submit" class="btn btn-danger shadow-sm" value="Page de modification">
  </form>
</script>
