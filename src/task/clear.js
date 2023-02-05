const{src, dest} = require("gulp");
const del = require("del");
const path = require("../myConfigs/path.js")

const clear = () => {
    return del(path.root);
}

module.exports = clear;