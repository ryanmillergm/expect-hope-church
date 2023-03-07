function loadLatestVideo() {
    const cid = "UCafkYCQyREXdN8jRB1Ao27Q";
    const channelURL = encodeURIComponent(`https://www.youtube.com/feeds/videos.xml?channel_id=${cid}`)
    const reqURL = `https://api.rss2json.com/v1/api.json?rss_url=${channelURL}`;

    fetch(reqURL)
        .then(response => response.json())
        .then(result => {
            // console.log('youtube first item result: ');
            // console.log(result.items[0]);

            const videoInfo = result.items[0];
            const videoId = videoInfo.guid.split(":").at(-1);

            const youtubeImage = document.getElementById("youtube-image");
            const youtubeModalVideo = document.getElementById('youtube-modal-video');

            youtubeImage.style.backgroundImage = `url(https://img.youtube.com/vi/${videoId}/maxresdefault.jpg`;
            youtubeModalVideo.setAttribute("href", `https://www.youtube.com/watch?v=${videoId}`);
        })
        .catch(error => console.log('error', error));
}

const youtubeVideo = document.getElementsByClassName('latestVideoEmbed');


