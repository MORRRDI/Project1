
let block_text = document.getElementById('block_text')
let button_text = document.getElementById('button_text')
//let text = 'Вёсёлая карусёль';
//console.log(text.replace(/ё/g,'е'))
        function textChange(){
                let text = prompt();
                if(text){
                    console.log('Текст до -' + text)
                    if(text.indexOf('ё')){
                        for(i=0; i<text.length; i++){
                            text = text.replace('ё','е');
                            console.log(text)
                        }
                    }
                    else{
                        console.log('ё не найдена')
                    }
                    let newText = text.replace('ё','е');
                    console.log('Текст после -' + newText)
                    block_text.textContent = newText;
            }
        }
button_text.addEventListener('click', textChange);