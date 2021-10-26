/* navegation */
const Home = () => import('./components/Home.vue');
const Contact = () => import('./components/Contact.vue');

/* components */
/* ===  Security === */
const Register = () => import('./components/Register.vue');
const Login = () => import('./components/Login.vue');
const Logout = () => import('./components/Logout.vue');

/* === SHOPS === */
const IndexShop = () => import('./components/shop/Index.vue');
const CreateShop = () => import('./components/shop/Create.vue');
const EditShop = () => import('./components/shop/EditShop.vue');
const BurnDownShop = () => import('./components/shop/BurnDown.vue');

/* === PAINTINGS === */
const SelectAGallery = () => import('./components/pictures/SelectAGallery.vue');
const PaintingByGallery = () => import('./components/pictures/PaintingByGallery.vue');
const AllPainting = () => import('./components/pictures/AllPainting.vue');
const CreatePainting = () => import('./components/pictures/Create.vue');


export const routes = [
    {
        name: 'Home',
        path: '/',
        component: Home
    },
    //=== SECURITY
    // REGISTER
    {
        name: 'Register',
        path: '/register',
        component: Register
    },
    // lOGIN
    {
        name: 'Login',
        path: '/Login',
        component: Login
    },
    // lOGOUT
    {
        name: 'Logout',
        path: '/Logout',
        component: Logout
    },

    {
        name: 'Contact',
        path: '/contact',
        component: Contact
    },

    // -- SHOP
    //Shop list-show
    {
        name: 'IndexShop',
        path: '/IndexShop',
        component: IndexShop
    },
    //create
    {
        name: 'CreateShop',
        path: '/CreateShop',
        component: CreateShop
    },
    //edit
    {
        name: 'EditShop',
        path: '/EditShop',
        component: EditShop
    },
    //Delete
    {
        name: 'BurnDownShop',
        path: '/BurnDownShop',
        component: BurnDownShop
    },

    //========== PAINTINGS
    //Seleccionar una galeria
    {
        name: 'SelectAGallery',
        path: '/SelectAGallery',
        component: SelectAGallery
        
    },
    //ver cuadros por galeria
    {
        name: 'PaintingByGallery',
        path: '/PaintingByGallery/:id',
        component: PaintingByGallery
    },
    //ver todos los cuadros
    {
        name: 'AllPainting',
        path: '/AllPainting',
        component : AllPainting
    },
    //crear un cuadro
    {
        name: 'CreatePainting',
        path: '/CreatePainting',
        component: CreatePainting
    }
]