/*
  Copyright 2016 All Rights Reserved.
 *
 * Script
 *
 * @file script.js
 * @author Stoyan Genchev
 *
 */

// necessities
var canvas = document.getElementsByTagName("canvas")[0];
var ctx = canvas.getContext("2d");

canvas.width = window.innerWidth / 2.5;
canvas.height = window.innerWidth / 2.5;
var radius = canvas.width / 2;

ctx.translate(radius, radius);
radius = radius * 0.88;

setInterval(drawClock, 1);

// initialising function
function drawClock() {
    drawInterface(ctx, radius);
    drawHours(ctx, radius);
    drawMinutes(ctx, radius);
    drawTime(ctx, radius);
}

// drawing the layout of the clock
function drawInterface(ctx, radius) {
    ctx.beginPath();
    ctx.arc(0, 0, radius, 0, 2 * Math.PI);
    ctx.fillStyle = 'white';
    ctx.fill();
    ctx.lineWidth = radius * 0.001;
    ctx.stroke();
    ctx.beginPath();
    ctx.arc(0, 0, radius * 0.025, 0, 2 * Math.PI);
    ctx.fillStyle = '#333';
    ctx.fill();
}

// drawing the hours on the layout
function drawHours(ctx, radius) {
    var ang;
    var num;
    ctx.font = radius * 0.15 + "px arial";
    ctx.textBaseline = "middle";
    ctx.textAlign = "center";
    for (num = 1; num < 13; num++) {
        ang = num * 22 / 7 / 6;
        ctx.rotate(ang);
        ctx.translate(0, -radius * 0.75);
        ctx.rotate(-ang);
        ctx.fillText(num, 0, 0);
        ctx.rotate(ang);
        ctx.translate(0, radius * 0.75);
        ctx.rotate(-ang);
    }
}

// drawing the minutes on the layout
function drawMinutes(ctx, radius) {
    var ang;
    var num;
    ctx.font = radius * 0.08 + "px arial";
    ctx.textBaseline = "middle";
    ctx.textAlign = "center";
    for (num = 0; num < 60; num += 5) {
        ang = num * 22 / 7 / 30;
        ctx.rotate(ang);
        ctx.translate(0, -radius * 0.9);
        ctx.rotate(-ang);
        ctx.fillText(num, 0, 0);
        ctx.rotate(ang);
        ctx.translate(0, radius * 0.9);
        ctx.rotate(-ang);
    }
}

// drawing an arrow on the layout // called by the drawTime function
function drawArrow(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.moveTo(0, 0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}

// getting the actual time // calling the drawArrow function to draw each arrow
function drawTime(ctx, radius) {
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();

    hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60));
    drawArrow(ctx, hour, radius * 0.5, radius * 0.04);

    minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60));
    drawArrow(ctx, minute, radius * 0.60, radius * 0.03);

    second = (second * Math.PI / 30);
    drawArrow(ctx, second, radius * 0.8, radius * 0.02);
}

/* making the anologue clock responsive */
function resizeCanvas() {
    canvas.width = window.innerWidth / 2.5;
    canvas.height = window.innerWidth / 2.5;
    radius = canvas.width / 2;

    ctx.translate(radius, radius);
    radius = radius * 0.88;

    drawClock;
}

if (window.attachEvent) {
    window.attachEvent('onresize', resizeCanvas);
} else if (window.addEventListener) {
    window.addEventListener('resize', resizeCanvas, true);
}