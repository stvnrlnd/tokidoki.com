---
id: 51ac6bd8-bf22-4490-baf7-d6d9d8d965f5
blueprint: html
title: 'Map Element: Defining Image Maps'
teaser: 'The map HTML element is used to define an image map, a collection of clickable areas on an image, in conjunction with area elements. Each area can link to different destinations, allowing for interactive images.'
reference_title:
  code: '<map>'
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
        text: '<map>'
      -
        type: text
        text: ' HTML element is used to define an image map, which is an image with clickable areas. This element works in conjunction with the '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
      -
        type: text
        text: ' element to specify the regions of the image that are interactive. Each '
      -
        type: text
        marks:
          -
            type: code
        text: '<area>'
      -
        type: text
        text: ' element within a '
      -
        type: text
        marks:
          -
            type: code
        text: '<map>'
      -
        type: text
        text: ' defines a shape and the coordinates for a clickable region, which can link to different URLs or trigger different actions.'
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
        text: '<map>'
      -
        type: text
        text: ' element is not directly visible on the page; instead, it is associated with an '
      -
        type: text
        marks:
          -
            type: code
        text: '<img>'
      -
        type: text
        text: ' element through the '
      -
        type: text
        marks:
          -
            type: code
        text: usemap
      -
        type: text
        text: ' attribute. The '
      -
        type: text
        marks:
          -
            type: code
        text: usemap
      -
        type: text
        text: ' attribute specifies the name of the '
      -
        type: text
        marks:
          -
            type: code
        text: '<map>'
      -
        type: text
        text: ' element, creating a relationship between the image and the map. Here is an example of how the '
      -
        type: text
        marks:
          -
            type: code
        text: '<map>'
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
          <img src="example.jpg" alt="Example Image" usemap="#examplemap">
          <map name="examplemap">
            <area shape="rect" coords="34,44,270,350" alt="Section 1" href="section1.html">
            <area shape="circle" coords="337,300,44" alt="Section 2" href="section2.html">
            <area shape="poly" coords="140,121,181,116,204,160,204,222" alt="Section 3" href="section3.html">
          </map>
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
        text: '<map>'
  -
    type: set
    attrs:
      id: m0ige5hj
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
              - name
              - 'Specifies the name of the image map, which is used to reference it from the usemap attribute of an <img> element.'
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
        text: '<map>'
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
                text: Interactivity
              -
                type: text
                text: ': The '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<map>'
              -
                type: text
                text: ' element allows for the creation of interactive images, where different areas can link to different destinations or trigger different actions.'
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
                text: ': Proper use of the '
              -
                type: text
                marks:
                  -
                    type: code
                text: alt
              -
                type: text
                text: ' attribute in '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<area>'
              -
                type: text
                text: ' elements is crucial for accessibility, providing descriptive text for each clickable region.'
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
                text: ': Image maps can define complex shapes using the '
              -
                type: text
                marks:
                  -
                    type: code
                text: rect
              -
                type: text
                text: ', '
              -
                type: text
                marks:
                  -
                    type: code
                text: circle
              -
                type: text
                text: ', and '
              -
                type: text
                marks:
                  -
                    type: code
                text: poly
              -
                type: text
                text: ' attributes in '
              -
                type: text
                marks:
                  -
                    type: code
                text: '<area>'
              -
                type: text
                text: ', allowing for precise control over clickable regions.'
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
        text: '<map>'
      -
        type: text
        text: ' element is a powerful tool for creating interactive images with multiple clickable areas. It enhances user engagement by allowing different parts of an image to link to various resources or actions, making it useful for navigation, diagrams, and interactive content.'
link: 'https://html.spec.whatwg.org/multipage/image-maps.html#the-map-element'
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
updated_at: 1743366363
seo_title: 'HTML Map Element: Image Maps Explained'
seo_description: 'Explore the map HTML element for creating interactive image maps with clickable areas defined by area elements.'
og_title: 'Understanding the HTML Map Element'
og_description: 'Learn how the map element in HTML is used to create interactive image maps, defining clickable areas with area elements for enhanced user interaction.'
date: '2025-03-30'
---
