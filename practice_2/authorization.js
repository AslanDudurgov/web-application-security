const fetch = require('node-fetch');

usersRouter.get("/test/:userId", async (req, res) => {
  try {
    const { userId } = req.params;

    // Имитация аутентификации пользователя через API
    const response = await fetch(`https://jsonplaceholder.typicode.com/users/${userId}`);
    if (!response.ok) {
      throwError(403, "1"); 
    }

    const user = await response.json();
    if (!user) {
      throwError(403, "1"); 
    }

    return res.status(200).json(user);
  } catch (e) {
    console.error(e);
    return res.status(e.code || 500).json(e);
  }
});
