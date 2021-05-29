
declare global {
    
}

import './../../vendor/archtechx/airwire/resources/js/airwired'

declare module 'airwire' {
    export type TypeMap = {
    'update-product': UpdateProduct
}
    interface UpdateProduct {
    name: string;
    user: any;
    errors: {
        [key in keyof WiredProperties<UpdateProduct>]: string[];
    }

    loading: boolean;

    watch(responses: (response: ComponentResponse<UpdateProduct>) => void, errors?: (error: AirwireException) => void): void;
    defer(callback: CallableFunction): void;
    refresh(): ComponentResponse<UpdateProduct>;
    remount(...args: any): ComponentResponse<UpdateProduct>;

    readonly: UpdateProduct;

    deferred: UpdateProduct;
    $component: UpdateProduct;
}


}