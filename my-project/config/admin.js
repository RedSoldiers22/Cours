module.exports = ({ env }) => ({
  auth: {
    secret: env('ADMIN_JWT_SECRET', 'b588614022b945d08a8da8316b4d0146'),
  },
});
