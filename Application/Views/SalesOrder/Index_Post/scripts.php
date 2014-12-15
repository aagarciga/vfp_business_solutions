<script>
    Dandelion.namespace('App.Screen.SalesOrder', window);
    
    // Module Pattern
    App.Screen.SalesOrder = (function (App, global){

        // references to the global object    
        // and to the global app namespace object    
        // are now localized
        
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
                console.log(App, global);
            }
        };
        
        this.init();
    })(App, this); 
</script>