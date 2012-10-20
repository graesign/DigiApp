 <?php print_r($posts)
 ?>
 <!-- File: /app/views/posts/index.ctp -->
<br />
<h1>Blog posts</h1>
<table>
	<tr>
		<th>Id</th>
		<th>Title</th>
		<th>Created</th>
	</tr>

	<!-- Here is where we loop through our $posts array, printing out post info -->

	<?php foreach ($posts as $hall): ?>
	<tr>
		<td><?php echo $hall['Post']['id']; ?></td>
		
		<td><?php echo $hall['Post']['created']; ?></td>
	</tr>
	<?php endforeach; ?>

</table>