let nombre=["LIBRA DE COBRE","EURO","DÓLAR OBSERVADO","TASA POLÍTICA MONETARIA (TPM)", "UNIDAD TRIBUTARIA MENSUAL (UTM)", "UNIDAD DE FOMENTO (UF)","INDICE DE VALOR PROMEDIO (IVP)","BITCOIN"];
        let codigo=["LIBRA_COBRE", "EURO", "DOLAR","TPM","UTM","UF","IVP","BITCOIN"];

        let combo1=document.getElementById('combo1')
        let combo2=document.getElementById('combo2')

        function Recorrer(combobox,valores)
        {
          combo2.innerHTML=''

          for(let index of valores)
          {
            combobox.innerHTML+=`
            <option>${index}</option>
            `
          }
        }

        function llenarnombre(){
          Recorrer(combo1, nombre)
        }
        llenarnombre()

      combo1.addEventListener('change',(e)=>{
        let dato=e.target.value
        switch (dato) {
          case 'LIBRA DE COBRE':
            Recorrer(combo2,codigo.slice(0))            
            break;
            case 'EURO':
            Recorrer(combo2,codigo.slice(1))            
            break;
            case 'DÓLAR OBSERVADO':
            Recorrer(combo2,codigo.slice(2))            
            break;
            case 'TASA POLÍTICA MONETARIA (TPM)':
            Recorrer(combo2,codigo.slice(3))         
            break;
            case 'UNIDAD TRIBUTARIA MENSUAL (UTM)':
            Recorrer(combo2,codigo.slice(4))            
            break;
            case 'UNIDAD DE FOMENTO (UF)':
            Recorrer(combo2,codigo.slice(5))            
            break;
            case 'INDICE DE VALOR PROMEDIO (IVP)':
            Recorrer(combo2,codigo.slice(6))            
            break;
            case 'BITCOIN':
            Recorrer(combo2,codigo.slice(7))            
            break;
          default:
            break;
        }
      })


        let combo3=document.getElementById('combo3')
        let combo4=document.getElementById('combo4')

        function Recorrer2(combobox2,valores2)
        {
          combo4.innerHTML=''

          for(let index2 of valores2)
          {
            combobox2.innerHTML+=`
            <option>${index2}</option>
            `
          }
        }

        function llenarnombre2(){
          Recorrer2(combo3, nombre)
        }
        llenarnombre2()

      combo3.addEventListener('change',(e)=>{
        let dato=e.target.value
        switch (dato) {
          case 'LIBRA DE COBRE':
            Recorrer(combo4,codigo.slice(0))            
            break;
            case 'EURO':
            Recorrer(combo4,codigo.slice(1))            
            break;
            case 'DÓLAR OBSERVADO':
            Recorrer(combo4,codigo.slice(2))            
            break;
            case 'TASA POLÍTICA MONETARIA (TPM)':
            Recorrer(combo4,codigo.slice(3))         
            break;
            case 'UNIDAD TRIBUTARIA MENSUAL (UTM)':
            Recorrer(combo4,codigo.slice(4))            
            break;
            case 'UNIDAD DE FOMENTO (UF)':
            Recorrer(combo4,codigo.slice(5))            
            break;
            case 'INDICE DE VALOR PROMEDIO (IVP)':
            Recorrer(combo4,codigo.slice(6))            
            break;
            case 'BITCOIN':
            Recorrer(combo4,codigo.slice(7))            
            break;
          default:
            break;
        }
      })

      function filterFloat(evt,input){
          // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
          var key = window.Event ? evt.which : evt.keyCode;   
          var chark = String.fromCharCode(key);
          var tempValue = input.value+chark;
          var isNumber = (key >= 48 && key <= 57);
          var isSpecial = (key == 8 || key == 13 || key == 0 ||  key == 46);
          if(isNumber || isSpecial){
              return filter(tempValue);
          }        
          return false;   
          
          
      }
      function filter(__val__){
          var preg = /^([0-9]+\.?[0-9]{0,5})$/; 
          return (preg.test(__val__) === true);
      }
  