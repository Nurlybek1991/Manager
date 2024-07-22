<div id="main">
    <div class="list">
        <div class="title removable editable">This is a list</div>
        <div class="content">
            @foreach($tasks as $task)
            <div class="card removable editable"> {{ $task['description'] }}</div>
            @endforeach
        </div>
        <div class="add-card editable">Add another card</div>
    </div>
    <div class="list">
        <div class="title removable editable">Another list</div>
        <div class="content">
            <div class="card removable editable">Hello world!</div>
        </div>
        <div class="add-card editable">Add another card</div>
    </div>
    <div class="list">
        <div class="title removable editable">Empty list</div>
        <div class="content"></div>
        <div class="add-card editable">Add another card</div>
    </div>

</div>

<div class="add-list">
    <div class="title editable">Add another list</div>
</div>

<style>
    body {
        font-family: sans-serif;
        color: #172b4d;
        background-color: #00A3E0;
        display: flex;
        align-items: start;
    }

    div {
        border-radius: 3px;
    }

    #main {
        display: flex;
        align-items: start;
    }

    .title {
        font-weight: 600;
        margin: 7px;
        padding: 10px;
    }

    .editable {
        user-select: none;
        outline: none;
        display: flex;
        justify-content: space-between;
    }

    .editing {
        background: white;
        color: #172b4d !important;
        box-shadow:inset 0px 0px 0px 2px #0279bf;
    }

    .editing:hover {
        background: white !important;
    }

    .card {
        background: white;
        border-bottom: 1px solid #aaa;
        margin: 7px;
        padding: 10px;
        cursor: pointer !important;
    }

    .list {
        /*   padding: 7px; */
        min-width: 280px;
        margin: 10px 5px;
        position: relative;
        background: #dfe1e6;
    }


    .add-list {
        min-width: 280px;
        margin: 10px 5px;
        position: relative;
        background: rgba(0,0,0,.12);
        color: hsla(0,0%,100%,.8);
    }

    .ghost {
        opacity: .1;
        color: #000;
        background-color: #000;
    }

    .add-card {
        width: calc(100% - 35px);
        display: inline-block;
        padding: 10px;
        margin-top: 0px;
        color: gray;
        text-decoration: none;
        margin: 7px;
        padding: 10px;
        /*   border-bottom: 1px solid #dfe1e6; */
    }

    .add-card:hover {
        background-color: rgba(9,30,66,.13);
    }

    .del {
        font-weight: 600;
        color: gray;
    }
    .content {
        border-bottom: 1px solid #cecece;
    }
</style>
