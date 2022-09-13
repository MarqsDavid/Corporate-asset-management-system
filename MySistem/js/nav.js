        // Menu toggle
        let menuToggle = document.querySelector('.toggle');
        let nav = document.querySelector('.nav');

        menuToggle.addEventListener('click',function(e){
            // alert('clicou');
            menuToggle.classList.toggle('active');
            nav.classList.toggle('active');
        })

        // Active class

        let list = document.querySelectorAll('.list');
        list.forEach(elements =>{
            elements.addEventListener('click',function(e){
                let active = document.querySelectorAll('.list.active');
                active.forEach(element =>{
                    element.classList.remove('active');
                })
                elements.classList.toggle('active');
            })
        })


        function alertaSai(){
            alert('deseja realmente sair?')
        }
        