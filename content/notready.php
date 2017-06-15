<style scoped>
    .painter {
        width: 147px;
        height: 370px;
        background: url(/assets/images/painter.png) no-repeat center center;
    }
    .message {
        font-size: 1em;
        margin: 7px 0;
    }

    .try-btn {
        background-color: #7CB8C9;
        color: white;
        font-weight: bold;
        font-size: 1em;
        width: 329px;
        border-radius: 4px;
        padding: 0.2em 0;
    }

    @media screen and (max-width: 48em) {
        .painter {
            background-size: 73px 185px;
            width: 73px;
            height: 185px;
        }

        .message {
            font-size: 1em;
        }

        .try-btn {
            width: 80%;
        }
    }
</style>

<div class="pure-u-1 pure-u-md-1 centered-text">
    <div class="message bold">The feature is not ready yet</div>
    <div class="message">Some user stories were not implemented.</div>
    <div class="message">Please check you’ve deployed the latest build in the production environment.</div>
    <div class="pure-u-1">
        <div class="horizontal-center painter"></div>
    </div>
    <div class="pure-u-1" style="margin-top: 1em;"><a class="pure-button try-btn" href="/">Try Again</a></div>
</div>
