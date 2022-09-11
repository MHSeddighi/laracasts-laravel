const customClick=new CustomEvent('customClick',{
    detail:{},
    bubbles:false,
    capture:false,
    cancelable:true
});

function customClickListener(element){
    if(element instanceof HTMLElement){
        element.addEventListener('click',e=>{
            element.dispatchEvent(customClick);
        });
    }
}

export default customClickListener;