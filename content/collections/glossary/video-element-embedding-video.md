---
id: ab8048e6-81f9-4aa5-8630-e0462f61dcfb
blueprint: html
title: 'Video Element: Embedding Video Content'
teaser: 'The video HTML element is used to embed video content directly into a webpage. It supports various attributes for controlling playback, such as controls, autoplay, loop, and muted. The element can include multiple <source> elements to specify different video formats, ensuring compatibility across different browsers.'
reference_title:
  code: '<video>'
  mode: htmlmixed
article:
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' HTML element is used to embed video content in a webpage. It provides a standard way to include video files, allowing users to play videos directly within their browsers without needing external plugins. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' element supports various video formats and can be customized with controls, dimensions, and other attributes to enhance the user experience.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Usage and Characteristics'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' element is a block-level element that can contain multiple '
      -
        type: text
        marks:
          -
            type: code
        text: '<source>'
      -
        type: text
        text: ' elements to specify different video formats, ensuring compatibility across different browsers. It can also include a '
      -
        type: text
        marks:
          -
            type: code
        text: '<track>'
      -
        type: text
        text: ' element for subtitles or captions. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' tag can be used:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <video width="640" height="360" controls>
            <source src="movie.mp4" type="video/mp4">
            <source src="movie.webm" type="video/webm">
            Your browser does not support the video tag.
          </video>
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Valid Attributes for '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
  -
    type: set
    attrs:
      id: m0iq4hzm
      values:
        type: table
        size: md
        first_row_headers: true
        first_column_headers: true
        table:
          -
            cells:
              - Attribute
              - Description
          -
            cells:
              - src
              - 'Specifies the URL of the video file. (Not commonly used when multiple <source> elements are provided.)'
          -
            cells:
              - controls
              - 'A Boolean attribute that, when present, displays video controls like play, pause, and volume.'
          -
            cells:
              - autoplay
              - 'A Boolean attribute that, when present, causes the video to start playing automatically when the page loads.'
          -
            cells:
              - loop
              - 'A Boolean attribute that, when present, causes the video to loop continuously.'
          -
            cells:
              - muted
              - 'A Boolean attribute that, when present, mutes the audio by default.'
          -
            cells:
              - poster
              - 'Specifies an image to be shown while the video is downloading or until the user hits the play button.'
          -
            cells:
              - width
              - 'Specifies the width of the video player in CSS pixels.'
          -
            cells:
              - height
              - 'Specifies the height of the video player in CSS pixels.'
          -
            cells:
              - preload
              - 'Suggests how the browser should load the video. Possible values are auto, metadata, and none.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'The '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' element supports all global attributes, allowing for additional customization and interaction through CSS and JavaScript.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        text: 'Benefits and Considerations'
  -
    type: bulletList
    content:
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'Cross-Browser Compatibility'
              -
                type: text
                text: ': By using multiple '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<source>'
              -
                type: text
                text: ' elements, the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<video>'
              -
                type: text
                text: ' element can provide different video formats to ensure compatibility across various browsers.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: 'User Experience'
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<video>'
              -
                type: text
                text: ' element enhances user experience by providing built-in controls for video playback, such as play, pause, and volume adjustment.'
      -
        type: listItem
        content:
          -
            type: paragraph
            content:
              -
                type: text
                marks:
                  -
                    type: bold
                text: Accessibility
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<track>'
              -
                type: text
                text: ' element can be used with '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<video>'
              -
                type: text
                text: ' to provide subtitles or captions, making video content more accessible to users with hearing impairments.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' element is a powerful tool for embedding video content in HTML documents. It offers a flexible and standardized way to include videos, enhancing the multimedia capabilities of web pages. By using the '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ' element, developers can create engaging and accessible video experiences for users across different devices and browsers.'
link: 'https://html.spec.whatwg.org/multipage/media.html#the-video-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: image_and_multimedia
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743366852
seo_title: 'HTML Video Element: Embedding Video Content Explained'
seo_description: 'Explore the video HTML element for embedding video content, with support for multiple formats and playback controls to enhance user experience.'
og_title: 'Understanding the HTML Video Element'
og_description: 'Learn how the video element in HTML is used to embed video content on webpages, offering playback controls and format compatibility for a seamless viewing experience.'
date: '2025-03-30'
---
