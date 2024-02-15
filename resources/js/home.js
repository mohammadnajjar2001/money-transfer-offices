const sideMenu = document.querySelector('aside');
        const menuBtn = document.getElementById('menu-btn');
        const closeBtn = document.getElementById('close-btn');
    
        const darkMode = document.querySelector('.dark-mode');
        const iconLightMode = darkMode.querySelector('.material-icons-sharp:nth-child(1)');
        const iconDarkMode = darkMode.querySelector('.material-icons-sharp:nth-child(2)');
    
        menuBtn.addEventListener('click', () => {
            sideMenu.style.display = 'block';
        });
    
        closeBtn.addEventListener('click', () => {
            sideMenu.style.display = 'none';
        });
    
        darkMode.addEventListener('click', () => {
            document.body.classList.toggle('dark-mode-variables');
            iconLightMode.classList.toggle('active');
            iconDarkMode.classList.toggle('active');
        });
    
        // Orders variable seems to be missing, assuming it's an array
        Orders.forEach(order => {
            const tr = document.createElement('tr');
            const trContent = `
                <td>${order.productName}</td>
                <td>${order.productNumber}</td>
                <td>${order.paymentStatus}</td>
                <td class="${order.status === 'Declined' ? 'danger' : order.status === 'Pending' ? 'warning' : 'primary'}">${order.status}</td>
                <td class="primary">Details</td>
            `;
            tr.innerHTML = trContent;
            document.querySelector('table tbody').appendChild(tr);
        });