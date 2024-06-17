<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vote condition</title>
    <link rel="stylesheet" href="./CSS/vote.css">
    
    
</head>
<body>
    
    <div class="container">
        
        <form   method="post">
            <label>Age</label>
            <input type="number" name="age" placeholder="Enter your Age" id="age">
            <input type="submit" name="button" value="Check" id="btn">
            
            
        </form>
        <div class="display-section">
            <label id="title">Validity</label>
            <div id="validity-displaybox">
                <?php include 'vote.php';?>
            </div>
        </div>
        
    </div>

</body>
</html>
