import {SubjectChapterRepo} from './../../api/subject-chapter-api';

const state = {
    questions: [],
    subjects: [],
    currentSubject: {},
    tags: [],
};

const mutations = {
    setTags(state, payload) {
        state.tags = payload;
    },
    setSubjects(state, payload) {
        state.subjects = payload;
    },
    setCurrentSubjects(state, payload) {
        state.currentSubject = payload;
    },
};
const actions = {
    fatchTags({commit}) {

    },
    async fatchSubjects({commit}) {
        const {data} = await SubjectChapterRepo.getAllSubjectsWithChapter();
        console.log(data);
        commit('setSubjects', data);
    }
};
const getters = {
    loadSubjects(state) {
        return state.subjects;
    },
    getCurrentSubject(state) {
        return state.currentSubject;
    },
    getTags(state) {
        return state.tags;
    },
};
export default {
    state,
    mutations,
    actions,
    getters
};