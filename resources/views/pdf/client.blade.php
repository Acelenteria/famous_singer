<!DOCTYPE html>
<html>

<head>
    <title>MelodyVault
    </title>
</head>
<style>
    *{
        margin: 0;
    }
</style>
<body>
    <div style="">
        <div style="text-align: center; color: black; padding: 25px">
            <h1>MelodyVault</h1>
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 30px">
            Artist Name: {{$client->artist}}
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 30px">
            Latest Song: {{$client->music}}
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 30px">
            Total Followers: {{$client->followers}}
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 30px">
            Artist Age: {{$client->age}}
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 30px">
            Spotify Name: {{$client->spotify}}
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 30px">
            Youtube Channel: {{$client->youtube}}
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 30px">
            Email: {{$client->email}}
        </div>
        <div style="text-align: center; color: black; padding: 25px; font-size: 20px">

Dear {{$client->artist}},

We are delighted to inform you that you have been added to our MelodyVault, a place where your fans can keep up to date with your latest song releases and performances. This platform will serve as a hub for people to discover and follow your musical journey, ensuring that your music reaches a wider audience and remains accessible to your fans at all times.

We believe that MelodyVault will be instrumental in connecting you with your supporters and giving them a seamless experience to stay connected with your artistic endeavors. We are committed to ensuring your success and providing you with the tools to manage and share your music with the world.

Thank you for entrusting us with your talent, and we look forward to seeing your career soar to new heights through MelodyVault.
 <br> <br>
Best regards,
[MelodyVault]
        </div>

    </div>



</body>
</html>
