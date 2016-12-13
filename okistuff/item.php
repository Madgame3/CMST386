<?php
  require 'head.php';
 ?>
 <body>
   <?php
      require 'header.php';
      require 'nav.php';
      require 'container.php';
   ?>
   <section>
     <h1>Posting an Item</h1>
     <hr>
     <div>
       <p>Selling an item is simple, fill out the required fields below and submit, you're item will be posted for 30 days.</p>
     </div>
     <form action="item_post.php" method="post">
         <br>
           <table class="php_table">
             <tr>
               <th>Field</th>
               <th>Input</th>
             </tr>
             <tr>
               <td>Name:</td>
               <td><input type="text" name="user_name" required></td>
             </tr>
             <tr>
               <td>Email:</td>
               <td><input type="email" name="email" required></td>
             </tr>
             <tr>
               <td>Phone:</td>
               <td><input type="tel" name="phone"></td>
             </tr>
             <tr>
               <td>Item Title:</td>
               <td><input type="text" name="title" required></td>
             </tr>
             <tr>
               <td>Item Price:</td>
               <td><input type="text" name="price" required></td>
             </tr>
             <tr>
               <td>Item Category:</td>
               <td>
                 <select name="category" placeholder="Please Select One" required>
                   <option value="">Select One</option>
                   <option value="Clothing & Accessories">Clothing & Accessories</option>
                   <option value="Crafts & Tools">Crafts & Tools</option>
                   <option value="Electronics">Electronics</option>
                   <option value="Entertainment">Entertainment</option>
                   <option value="Home & Living">Home & Living</option>
                   <option value="Kids & Baby">Kids & Baby</option>
                   <option value="Pets">Pets</option>
                   <option value="Business & Services">Business & Services</option>
                   <option value="Vehicles">Vehicles</option>
                 </select>
               </td>
             </tr>
             <tr>
               <td>Description:</td>
               <td>
                 <textarea name="description" rows="3" cols="30"></textarea>
               </td>
             </tr>
             <tr>
               <td>Upload Image:</td>
               <td>
                 <input type="file" name="image">
               </td>
             </tr>
           </table>
           <button type="submit" value="submit" name="submit">Submit</button>
           <button type="reset" value="reset">Reset</button>
     </form>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
