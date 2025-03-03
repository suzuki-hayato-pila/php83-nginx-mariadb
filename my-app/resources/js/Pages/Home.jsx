import react from "react";

const Home = (props) => {
    return (
        <>
            <h1>ショップ一覧</h1>
            <ul>
                {props.shops.map((shop)=>(
                <li key={shop.id}>{shop.name}</li>
            ))}
            )</ul>
        </>
    );
}