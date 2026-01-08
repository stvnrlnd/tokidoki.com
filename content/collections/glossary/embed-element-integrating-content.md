---
id: ac8622e8-29fc-421b-8424-139685c8f530
blueprint: html
title: 'Embed Element: Integrating External Content'
teaser: 'The embed HTML element is used to integrate external content, such as multimedia or interactive applications, directly into a webpage.'
reference_title:
  code: '<embed>'
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
        text: '<embed>'
      -
        type: text
        text: ' HTML element is used to embed external content at a specified point within a document. This content can include multimedia such as videos, audio, images, or other interactive content provided by an external application or source. The '
      -
        type: text
        marks:
          -
            type: code
        text: '<embed>'
      -
        type: text
        text: ' element is a self-closing tag, meaning it does not have a closing tag, and it is considered a void element. While it provides a way to include various types of content, the '
      -
        type: text
        marks:
          -
            type: code
        text: '<embed>'
      -
        type: text
        text: ' element is less commonly used today due to the availability of more specialized elements like '
      -
        type: text
        marks:
          -
            type: code
        text: '<video>'
      -
        type: text
        text: ', '
      -
        type: text
        marks:
          -
            type: code
        text: '<audio>'
      -
        type: text
        text: ', and '
      -
        type: text
        marks:
          -
            type: code
        text: '<iframe>'
      -
        type: text
        text: .
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: 'Usage and Attributes'
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
        text: '<embed>'
      -
        type: text
        text: ' element is often used to incorporate content that requires a browser plug-in, although modern browsers have largely deprecated support for such plug-ins. It is important to note that using the '
      -
        type: text
        marks:
          -
            type: code
        text: '<embed>'
      -
        type: text
        text: ' element is generally discouraged in favor of more semantically appropriate elements. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<embed>'
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
        text: '<embed type="video/webm" src="video.webm" width="640" height="480" title="Sample Video">'
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
        text: '<embed>'
      -
        type: text
        text: ' element supports several attributes:'
  -
    type: set
    attrs:
      id: m0h646p1
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
              - 'Specifies the URL of the resource being embedded.'
          -
            cells:
              - type
              - 'Specifies the MIME type of the embedded content.'
          -
            cells:
              - width
              - 'Specifies the width of the embedded content in CSS pixels.'
          -
            cells:
              - height
              - 'Specifies the height of the embedded content in CSS pixels.'
          -
            cells:
              - title
              - 'Provides a text label for accessibility, describing the content.'
  -
    type: heading
    attrs:
      level: 3
    content:
      -
        type: text
        marks:
          -
            type: bold
        text: Considerations
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
                text: Accessibility
              -
                type: text
                text: ': It is recommended to use the '
              -
                type: text
                marks:
                  -
                    type: code
                text: title
              -
                type: text
                text: ' attribute to provide a description of the embedded content for users relying on assistive technologies.'
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
                text: Alternatives
              -
                type: text
                text: ': For embedding multimedia content, consider using '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<video>'
              -
                type: text
                text: ', '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<audio>'
              -
                type: text
                text: ', or '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<iframe>'
              -
                type: text
                text: ' elements, which are more widely supported and offer better semantic meaning.'
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
                text: Deprecation
              -
                type: text
                text: ': As browser support for plug-ins diminishes, reliance on the '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<embed>'
              -
                type: text
                text: ' element should be minimized in favor of modern HTML5 elements that provide similar functionality with improved accessibility and compatibility.'
  -
    type: paragraph
    content:
      -
        type: text
        text: 'In summary, while the '
      -
        type: text
        marks:
          -
            type: code
        text: '<embed>'
      -
        type: text
        text: ' element can be used to include external content in a webpage, it is often better to use more specific HTML5 elements that provide enhanced functionality and compatibility.'
link: 'https://html.spec.whatwg.org/multipage/embedded-content.html#the-embed-element'
seo_noindex: false
seo_nofollow: false
seo_canonical_type: entry
sitemap_change_frequency: weekly
sitemap_priority: 0.5
tags:
  - html
comments_allowed: true
group: embedded_content
updated_by: c00c8ed8-a262-4060-92e8-44c2c4931c51
updated_at: 1743365238
seo_title: 'HTML Embed Element: External Content Integration'
seo_description: 'Learn about the embed HTML element for integrating external multimedia and interactive content into webpages.'
og_title: 'Understanding the HTML Embed Element'
og_description: 'Discover how the embed element in HTML is used to incorporate external content like multimedia and interactive applications directly into a webpage.'
date: '2025-03-30'
---
