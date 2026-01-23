import { route as routeFn } from 'ziggy-js';

declare global {
    var route: typeof routeFn;
}

declare module 'vue' {
    interface ComponentCustomProperties {
        route: typeof routeFn;
    }
}
declare module '*.vue' {
    import type { DefineComponent } from 'vue'
    const component: DefineComponent<{}, {}, any>
    export default component
}
