// Get the bearer token from localStorage
function getToken() {
    return localStorage.getItem('token');
}

// Handle API responses
function handleResponse(response) {
    if (response.status === 401) {
        // Unauthorized, clear token and redirect to welcome page
        localStorage.removeItem('token');
        window.location.href = '/';
        return;
    }
    return response.json();
}

// Logout function
async function logout() {
    try {
        const token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        
        const response = await fetch('/api/logout', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': token
            },
            credentials: 'include'
        });

        const data = await handleResponse(response);

        if (data && data.status === 'success') {
            // Clear token and redirect to welcome page
            localStorage.removeItem('token');
            window.location.href = '/';
        } else {
            console.error('Logout failed:', data ? data.message : 'Unknown error');
        }
    } catch (error) {
        console.error('Error during logout:', error);
        // Still try to redirect on error
        window.location.href = '/';
    }
}
