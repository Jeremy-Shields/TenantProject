$(document).ready(function(){
        
        $(".phoneMask").mask("999-999-9999");
        $('.nameValidation').on("blur", function(){
            
           var lettersOnlyRegEx = /^[a-zA-Z]+$/;
           if ($(this).val() === "")
           {
               //do nothing
           }
           else if (lettersOnlyRegEx.test($(this).val()) === false)
           {
               toastr.error('please enter a valid name');
               $(this).val("");
               $(this).focus();
           }
           
           

           
            
        });
        
        $('.addrValidation').on("blur" , function(){
            
            var addrRegEx = /^[A-Za-z0-9 _]*[A-Za-z0-9][A-Za-z0-9 _]*$/;
            
            if ($(this).val() === "")
            {
                // do nothing
            }
            else if (addrRegEx.test($(this).val()) === false)
            {
                toastr.error("Please do not use special charecters in addresses.");
                $(this).val("");
                $(this).focus();
            }
            
            
        });
        
        
        
});
