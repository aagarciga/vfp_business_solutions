<script>
    Dandelion.namespace('App.Screen.SalesOrder', window);
    
    // Module Pattern
    window.App.Screen.SalesOrder = (function (){
        // Dependencies
//        var objectA = App.Classes.ClassA,
//            objectB = App.Classes.ClassB;
        
        // Private Properties (without var)
        emptyArray = [],
        string1 = "String",
        int1 = 7,
        objectString = Object.prototype.toString();
        
        // Private Methods 
        privateMethod1 = function(){
            // TODO: Private Method1 Code goes here...
        };
        // End VAR
        
        // Optionally one-time init procedures
        init = function(){
            // TODO: Private Method1 Code goes here...
        };
        
        return {
            publicMethod1 : function(){
                // TODO: Public Method1 Code goes here...
            }
        };
        
        this.init();
    })();
</script>