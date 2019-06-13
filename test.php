<?php 


echo "<link rel='stylesheet' href='https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css'></link>";
echo "<script src='https://code.jquery.com/jquery-3.3.1.js'></script>";
echo "<script src='https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js'></script>";

echo "<table id='example' class='display' style='width:100%'>
         <thead>
            <tr>
                <th>First name</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>First name</th>
            </tr>
        </tfoot>
    </table>";



echo "
		<script type='text/javascript'>
			$(document).ready(function() {
			    $('#example').DataTable( {
			    	'info': false,
			        'processing': true,
			        'serverSide': true,
					'ajax': {
			            'url': 'api.php',
			            'type': 'POST'
			        },
			        'columns': [
			            { 'data': 'first_name' }
			        ]
			    } );
			} );
		</script>
		";
