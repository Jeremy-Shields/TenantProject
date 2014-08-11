$(document).ready(function(){
    
    
    
    $('.tenDelete').click(function(){
        
            
        var confirmd = confirm("Do you wish to remove this Tenant?");
        
        if (confirmd === true)
        {
            return true;
        }
        else
        {
            return false;
        }

        
        
        
        
    });
    
    
    
    
    
});