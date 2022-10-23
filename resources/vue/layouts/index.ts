import TheDefaultLayout from './default/TheDefaultLayout.vue'
import TheAdminLayout from './admin/TheAdminLayout.vue'

export const layouts = {
    'default': TheDefaultLayout,
    'admin': TheAdminLayout
}

export const getLayout = (name: string = 'default') => {
    if(! (name in layouts)){
        console.error(`Could not find ${name} layout, loading the default layout`)
        name = 'default'
    }
    return layouts[name]
}