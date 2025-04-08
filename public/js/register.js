document.getElementById('registerform').addEventListener('submit', async (e) => {
    e.preventDefault();
    const data = {
        name: document.getElementById('name').value,
        email: document.getElementById('email').value,
        password: document.getElementById('password').value
    };

    try {
        const response = await fetch('http://localhost:8000/api/register', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          body: JSON.stringify(data)
        });
    
        const result = await response.json();
        
        if (response.ok) {
          document.getElementById('message').innerText = result.message;
        } else {
          document.getElementById('message').innerText = JSON.stringify(result.errors || result);
        }
        
      } catch (error) {
        console.error('Error:', error);
        document.getElementById('message').innerText = 'Something went wrong!';
      }
});