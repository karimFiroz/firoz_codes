<?php include('include/header.php');?>

<p><h2>HTML Form:</h2></p>
<form action="#" method="post">
	Name: <input type="text" /> <br />
	Password: <input type="password" /> <br />
	Gander: <input type="checkbox" /> Male <input type="checkbox" /> Female<br />
	Gander: <input type="radio" /> Male <input type="radio" /> Female<br />
	Upload: <input type="file" /> <br />
	<input type="submit" value="Register!" /> 
</form>
<form action="#" method="post">
	Text: <input type="text" name="text" id="text" placeholder="Your name here"> <br />
	Search: <input type="search" name="search" id="search"> <br />
	eMail: <input type="email" name="email" id="email"> <br />
	URL: <input type="url" name="url" id="url"> <br />
	Telephone: <input type="tel" name="tel" id="tel"> <br />
	Date Time: <input type="datetime" name="datetime" id="datetime"> <br />
	Date : <input type="date" name="date" id="date"> <br />
	Month : <input type="month" name="month" id="month"> <br />
	Week : <input type="week" name="week" id="week"> <br />
	Time : <input type="time" name="time" id="time"> <br />
	Datetime-Local : <input type="datetime-local" name="datetime-local" id="datetime-local"> <br />
	Number : <input type="number" name="number" id="number"> <br />
	Range : <input type="range" name="range" id="range"> <br />
	Color : <input type="color" name="color" id="color"> <br />
</form>	
<p><h2>Navigation Menu:</h2></p>
<ul>
	<li>
		<a href="#" title="">Home</a>
		<a href="#" title="">About</a>
		<a href="#" title="">Services</a>
		<a href="#" title="">Profile</a>
		<a href="#" title="">Contact</a>
	</li>
</ul>
<p><h2>Table Normal:</h2></p>
<table border="1" width="400" align="center">
<tr>
	<th>Heading One</th>
	<th>Heading Two</th>
	<th>Heading Three</th>
	<th>Heading Four</th>
	<th>Heading Five</th>
</tr>
<tr>
	<td>Row 1</td>
	<td>Row 2</td>
	<td>Row 3</td>
	<td>Row 4</td>
	<td>Row 5</td>
</tr>
<tr>
	<td>Row 1</td>
	<td>Row 2</td>
	<td>Row 3</td>
	<td>Row 4</td>
	<td>Row 5</td>
</tr>
<tr>
	<td>Row 1</td>
	<td>Row 2</td>
	<td> </td>
	<td>Row 4</td>
	<td>Row 5</td>
</tr>
</table>
<table width="500" align="center" border="1">
<tr>
	<th colspan="5">Rowspan and Colspan Table:</th>
</tr>
<tr>
	<th>Name</th>
	<th>Age</th>
	<th>Salary</th>
	<th>Position</th>
	<th>Others</th>
</tr>
<tr>
	<td rowspan="4">Name</td>
	<td>About</td>
	<td rowspan="4">Salary</td>
	<td>Position</td>
	<td>Others</td>
</tr>
<tr>
	<td>About</td>
	<td>Position</td>
	<td>Others</td>
</tr>
<tr>
	<td>About</td>
	<td>Position</td>
	<td>Others</td>
</tr>
<tr>
	<td>About</td>
	<td>Position</td>
	<td>Others</td>
</tr>
<table>
<p><h2>Row and Column Span:</h2></p>
<p><h2>Paragraph:</h2></p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptate, explicabo, officia rerum aut unde nobis quos voluptatem mollitia vitae amet nulla atque voluptatibus porro! Iusto est doloribus error explicabo facere sed cum quasi maxime totam. Deleniti, dolorem nisi ex rerum laborum in sit. Sit, numquam, hic, aliquam ad in eum aliquid saepe dicta cupiditate quasi corrupti voluptatibus atque necessitatibus tempora debitis excepturi vitae! Praesentium, saepe, aut, provident ut amet ullam beatae eius omnis maiores esse ducimus assumenda eaque animi iste corporis! Architecto, pariatur, magni, officia, optio saepe dolore fugiat nihil atque numquam cum modi at quo doloremque enim totam fuga?</p>

<p><h2>Headings:</h2></p>
<h1>This is Heading 1</h1>
<h2>This is Heading 2</h2>
<h3>This is Heading 3</h3>
<h4>This is Heading 4</h4>
<h5>This is Heading 5</h5>
<h6>This is Heading 6</h6>

<p><h2>Text Formating:</h2></p>
<p>Italic text:</p>
<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, magnam aut numquam suscipit voluptatibus exercitationem?</em>
<p>Or,</p>
<i>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor, tenetur minima delectus dignissimos? Cumque, eius.</i>
<p>Bold text:</p>
<strong>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, nobis quam perferendis nihil repudiandae quisquam.</strong>
<p>Or,</p>
<b>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione, praesentium, delectus porro ex molestiae deleniti.</b>
<p>Or,</p>
<big>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore, adipisci?</big>
<small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem, veritatis deserunt recusandae ab aut repudiandae.</small>
<p><h2>Superscript and Subscript:</h2></p>
<p><h3>Superscript:</h3></p>
(a+b)<sup>2</sup> = a<sup>2</sup>+2ab+b<sup>2</sup>

<p><h3>Subscript:</h3></p> 
H<sub>2</sub>O, <br/>
O<sub>2</sub>
<p><h2>List:</h2></p>
<p><h3>Defination List:</h3></p>
<dl>	
	<dt>Computer Devices:</dt>
		<dd>Monitor</dd>
		<dd>Mouse</dd>
		<dd>Mouse</dd>
		<dd>Mouse</dd>
		<dd>Keyboard</dd>
		<dd>Keyboard</dd>
		<dd>Keyboard</dd>
</dl>
<p><h3>Ordered List:</h3></p>
<p>Computer Devices:</p>
<ol>
	<li>Monitor</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
</ol>
<br />
<ol type="a">
	<li>Monitor</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
</ol>		
<br>
<ol type="i">
	<li>Monitor</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
</ol>
<p><h3>Unordered List:</h3></p>
<p>Computer Devices:</p>
<ul>
	<li>Monitor</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
</ul>
<br>
<ul type="circle">
	<li>Monitor</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
</ul>		
<br>
<ul type="square">
	<li>Monitor</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Mouse</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
	<li>Keyboard</li>
</ul>

<?php include('include/footer.php');?>