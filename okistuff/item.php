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
               <td><input type="text" name="user_name" placeholder="Stephen" required></td>
             </tr>
             <tr>
               <td>Email:</td>
               <td><input type="email" name="email" placeholder="admin@okistuff.com" required></td>
             </tr>
             <tr>
               <td>Phone:</td>
               <td><input type="tel" name="phone" placeholder="080-4000-5900"></td>
             </tr>
             <tr>
               <td>Item Title:</td>
               <td><input type="text" name="title" placeholder="1999 Toyota Harrier White" required></td>
             </tr>
             <tr>
               <td>Item Price:</td>
               <td><input type="text" name="price" placeholder="$30" required></td>
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
                 <textarea name="description" rows="3" cols="30" placeholder="Item Description goes here"></textarea>
               </td>
             </tr>
             <tr>
               <td>Upload Image:</td>
               <td>
                 <input type="file" name="image">
               </td>
             </tr>
             <button class="orange-button" type="submit" value="submit" name="submit">Submit</button>
             <button class="orange-button" type="reset" value="reset">Reset</button>
           </table>

     </form>
   </section>
   <?php
      require 'footer.php';
    ?>
 </body>
</html>
