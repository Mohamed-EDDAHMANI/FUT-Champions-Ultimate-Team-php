<?php
include('../src/config/database.php');
$query = "SELECT COUNT(*) FROM players
WHERE players.deleted_at IS NULL";
$result = mysqli_query($conn, $query);
$playerCount = mysqli_fetch_assoc($result)['COUNT(*)'] ;

?>
<div class="statisticsContainer">
    <div class="graph">
        <canvas id="myChart"></canvas>
    </div>



</div>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
  const ctx = document.getElementById('myChart');
  

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Players', 'Clubs', 'Nationality', 'Teams', 'Goolkeepers', 'Other Players'],
      datasets: [{
        label: '# of Votes',
        data: [<?php echo $playerCount ?>, 19, 3, 5, 2, 3],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>