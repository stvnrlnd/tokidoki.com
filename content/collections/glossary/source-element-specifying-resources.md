---
id: 0d99b078-c99d-4f5c-aeff-9bcbd31b8c3a
blueprint: html
title: 'Source Element: Specifying Media Resources'
teaser: 'The source HTML element is used to specify multiple media resources for media elements like <audio> and <video>, or for the <picture> element to provide different image sources. It allows browsers to choose the most appropriate file based on media type or format support.'
reference_title:
  code: '<source>'
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
        text: '<source>'
      -
        type: text
        text: ' HTML element is used to specify multiple media resources for elements like '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: code
        text: '<picture>'
      -
        type: text
        text: '. It allows developers to provide different versions of a media file or image to accommodate various formats and conditions, such as browser compatibility or screen size. The browser will choose the first '
      -
        type: text
        marks:
          -
            type: code
        text: '<source>'
      -
        type: text
        text: ' element that it supports.'
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
        text: '<source>'
      -
        type: text
        text: ' element is a void element, meaning it does not have a closing tag. It is typically used within '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ', or '
      -
        type: text
        marks:
          -
            type: code
        text: '<picture>'
      -
        type: text
        text: ' elements to provide alternative media sources. Here are examples of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<source>'
      -
        type: text
        text: ' tag can be used in different contexts:'
  -
    type: heading
    attrs:
      level: 4
    content:
      -
        type: text
        text: 'Video Element:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <video controls>
            <source src="video.mp4" type="video/mp4">
            <source src="video.webm" type="video/webm">
            Your browser does not support the video tag.
          </video>
  -
    type: heading
    attrs:
      level: 4
    content:
      -
        type: text
        text: 'Audio Element:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <audio controls>
            <source src="audio.mp3" type="audio/mpeg">
            <source src="audio.ogg" type="audio/ogg">
            Your browser does not support the audio tag.
          </audio>
  -
    type: heading
    attrs:
      level: 4
    content:
      -
        type: text
        text: 'Picture Element:'
  -
    type: codeBlock
    attrs:
      language: null
    content:
      -
        type: text
        text: |-
          <picture>
            <source srcset="image-large.jpg" media="(min-width: 800px)">
            <source srcset="image-medium.jpg" media="(min-width: 500px)">
            <img src="image-small.jpg" alt="A description of the image">
          </picture>
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
        text: '<source>'
  -
    type: set
    attrs:
      id: m0il0fhp
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
              - 'Specifies the URL of the media file. Used in <audio> and <video>.'
          -
            cells:
              - type
              - 'Specifies the MIME type of the media resource. Helps the browser determine how to process the file.'
          -
            cells:
              - srcset
              - 'Specifies a list of image sources for different device resolutions or conditions. Used in <picture>.'
          -
            cells:
              - media
              - 'Defines the media condition (e.g., screen width) that must be met for the source to be used. Used in <picture>.'
          -
            cells:
              - sizes
              - 'Specifies the image sizes for different viewport widths. Used in <picture>.'
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
                text: Flexibility
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<source>'
              -
                type: text
                text: ' element provides flexibility by allowing developers to specify multiple formats of a media resource, ensuring compatibility across different browsers and devices.'
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
                text: 'Responsive Design'
              -
                type: text
                text: ': In the context of the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<picture>'
              -
                type: text
                text: ' element, '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<source>'
              -
                type: text
                text: ' helps implement responsive images by delivering the most appropriate image based on screen size and resolution.'
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
                text: 'Fallback Support'
              -
                type: text
                text: ': By providing multiple '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<source>'
              -
                type: text
                text: ' elements, developers can ensure that a suitable media file is available for a wide range of browsers, with fallback content available if none of the sources are supported.'
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
        text: '<source>'
      -
        type: text
        text: ' element is a powerful tool for providing multiple media resources for '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: code
        text: '<picture>'
      -
        type: text
        text: ' elements. It enhances compatibility, responsiveness, and user experience by allowing browsers to select the most suitable media file based on format support and device conditions.'
link: 'https://html.spec.whatwg.org/multipage/embedded-content.html#the-source-element'
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
updated_at: 1743366634
seo_title: 'HTML Source Element: Media Resource Specification Explained'
seo_description: 'Explore the source HTML element for defining media resources in audio, video, and picture elements, enhancing media compatibility and responsiveness.'
og_title: 'Understanding the HTML Source Element'
og_description: 'Learn how the source element in HTML is used to specify different media resources, ensuring optimal compatibility and performance for audio, video, and responsive images.'
date: '2025-03-30'
---
